
/*		4x4 Sudoku - swap version 
yr1 C prog hw

0 - 0 -		2!		- 0 - 0		2!	|	0 1 2 3		x-axis
0 0 - 0		3!		0 0 0 0		4!	|	1
0 - 0 0		3!		0 0 0 0		4!	|	2
- 0 - 0		2!		0 - 0 0		3!	|	3		[ 2-D array ]
									|
	TYPE 1				TYPE 2		|	y-axis	
--------------------------------------------------------------
c = config array	t = testing array
s2 s3 s4 = swap 2 3 4 numbers

*/

#include <stdio.h>
int x,y,c[4][4],t[4][4],nos=0;

int a(int x,int y){
	if(c[x][y]==0)	return 1;
	return 0;
}
int b(int x,int y){
	if(c[x][y]!=0)	return 1;
	return 0;
}

int six(int x1,int y1,int x2,int y2,int x3,int y3,int x4,int y4){
	if(t[x1][y1]==t[x2][y2]||t[x1][y1]==t[x3][y3]||t[x1][y1]==t[x4][y4]||t[x2][y2]==t[x3][y3]||t[x2][y2]==t[x4][y4]||t[x3][y3]==t[x4][y4])
		return 1;
	return 0;				//	12 13 14 23 24 34
}

void check(){
	int ok=1;
	for(x=0;x<=3;++x)	if(six(x,0,x,1,x,2,x,3))	ok=0;	// columns
	if(six(0,0,1,1,2,2,3,3)||six(0,3,1,2,2,1,3,0))	ok=0;	// diagonals
	if(six(0,0,1,0,0,1,1,1)||six(2,0,3,0,2,1,3,1)||six(0,2,1,2,0,3,1,3)||six(2,2,3,2,2,3,3,3))	ok=0;	// sub-squares
	if(ok){
		++nos;
		printf("Found solution!\n");
		for(y=0;y<=3;++y)
			printf("%d %d %d %d\n",t[0][y],t[1][y],t[2][y],t[3][y]);
	}
}

void s2(int x1,int x2,int y){
	int temp=t[x1][y];
	t[x1][y]=t[x2][y];
	t[x2][y]=temp;
}

void s3(int x1,int x2,int x3,int y,int counter){
	switch(counter%6){
		case 1:	case 4:	s2(x2,x3,y);	break;
		case 2:	case 5:	s2(x1,x3,y);	break;
		case 3:	case 0:	s2(x1,x2,y);	break;
	}
}								//	123	132	231 321 312 213 123

void s4(int y,int counter){
	int cc=counter%24;
	switch(cc){
		case 1:		t[0][y]=1;	t[1][y]=2;	t[2][y]=3;	t[3][y]=4;	break;
		case 7:		t[0][y]=2;	t[1][y]=1;	t[2][y]=3;	t[3][y]=4;	break;
		case 13:	t[0][y]=3;	t[1][y]=1;	t[2][y]=2;	t[3][y]=4;	break;
		case 19:	t[0][y]=4;	t[1][y]=1;	t[2][y]=2;	t[3][y]=3;	break;
	}
	s3(1,2,3,y,cc%6);			//	1-6 7-12 13-18 19-0
}

int main(void){
	int type,ok,f,i,e1,c1,c2;
	
	while(1){

	printf("------= Simple 4x4 Sudoku Solver =------\n");
	printf("Please enter the problem configuration:\n");
	for(y=0;y<=3;++y){
		printf("row %d: ",y+1);
		scanf("%d%d%d%d",&c[0][y],&c[1][y],&c[2][y],&c[3][y]);
	}
// check error
	e1=type=0;
	for(y=0;y<=3;++y)	for(x=0;x<=3;++x)	if(c[x][y]>4||c[x][y]<0)	e1=1;

	if(a(0,0)*b(1,0)*a(2,0)*b(3,0)*a(0,1)*a(1,1)*b(2,1)*a(3,1)*a(0,2)*b(1,2)*a(2,2)*a(3,2)*b(0,3)*a(1,3)*b(2,3)*a(3,3))	type=1;	else
	if(b(0,0)*a(1,0)*b(2,0)*a(3,0)*a(0,1)*a(1,1)*a(2,1)*a(3,1)*a(0,2)*a(1,2)*a(2,2)*a(3,2)*a(0,3)*b(1,3)*a(2,3)*a(3,3))	type=2;
	
	if(e1||type==0){
		printf("Error:\n");
		if(e1)		printf("[1] numbers must be in the range [0,4]\n");
		if(type==0)	printf("[2] unsupported configuration\n");
		continue;
	}
// generate first combination for each row
	for(y=0;y<=3;++y)	for(x=0;x<=3;++x)	t[x][y]=c[x][y];

	for(y=0;y<=3;++y)
		for(x=0;x<=3;++x)
			if(c[x][y]==0)
				for(f=1;f<=4;++f){
					ok=1;
					for(i=0;i<=3;++i){
						if(i==x)	continue;
						if(f==t[i][y])	{	ok=0;	break;	}
					}
					if(ok)	{	t[x][y]=f;	break;	}
				}
	check();
// loop for all possibilities
	c1=c2=0;
	switch(type){
		case 1:
			for(i=2;i<=144;++i){					//	2!3!3!2!=144
				if(i==73)		s2(0,2,0);			//	144/2+1=73
				if(i%12==0)		s3(0,1,3,1,++c1);
				if(i%2==0)		s3(0,2,3,2,++c2);
				s2(1,3,3);
				check();
			}	break;
		case 2:
			for(i=2;i<=6912;){						//	2!4!4!3!=6912
				if(i==3457)		s2(1,3,0);			//	6912/2+1=3457
				if(i%144==0)	s4(1,++c1);
				if(i%6==0)		s4(2,++c2);
				s3(0,2,3,3,i++);
				check();
			}	break;
	}
	printf("Number of solutions: %d",nos);
	break;
	}
	system("pause"); 
	return 0;
}
