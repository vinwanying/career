# stock trade strategy backtesting
ptm<-proc.time()
d<-apply(as.matrix(read.csv("fda500.csv", header=F, sep=",")[-c(1,2),]),2,as.numeric)
maxStock<-dim(d)[2]/3
best<-0
#for(clh in 2:2)  for(sma in 21:21)  for(smaEx in 1:1)  for(bb in 18:18){
clh<-2
sma<-21
smaEx<-1
bb<-18
#for(Ex in seq(1,1.2,0.01)){
  rrV<-rep(1,maxStock)
  for(stock in 1:maxStock){
    p<-d[,stock*3-clh]
    p<-p[!is.na(p)]
    n<-length(p)
    if(n<2450)  next
    cp<-d[,stock*3]
    cp<-cp[!is.na(cp)]
    bbH<-bbL<-smaV<-rep(0,n)
    for(i in sma:n)
      smaV[i]<-mean(p[(i-sma+1):i])
    for(i in bb:n){
	m<-mean(cp[(i-bb+1):i])
	sd3<-3*sqrt(var(cp[(i-bb+1):i])*(bb-1)/bb)*1.05
      bbH[i]<-m+sd3
      bbL[i]<-m-sd3
    }
    hold<-c250<-cc<-0
    for(i in max(sma,bb):(n-1)){
      c250<-c250+1
      if(c250==250){
        if(cc>=4 & cc<=13){c250<-cc<-0}
        else{rrV[stock]<-0; break}
      }
	if(!hold){
        if(100*(p[i]-smaV[i])>smaEx*smaV[i] || cp[i]<bbL[i]){  
          hold<-p[i]
          cc<-cc+1
        }
	} 
      else if(100*(smaV[i]-p[i])>smaEx*smaV[i] || cp[i]>bbH[i]){
        rrV[stock]<-rrV[stock]*p[i]/hold
        hold<-0
      }
    }
    if(hold)  rrV[stock]<-rrV[stock]*p[n]/hold
  }
  v<-sort(rrV,TRUE)[1:10]
  top10<-sum(v)
  if(top10>best[1] && v[10]>8.5)  best<-c(top10,clh,sma,smaEx,bb)
#}
best
proc.time()-ptm
v
for(i in 1:10)  print((1:596)[rrV==v[i]])