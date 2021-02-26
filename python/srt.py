# k = time(seconds) difference between voice and subtitle
k=30

def plus(i):
    s = int(x[i])*10 + int(x[i+1]) + k
    m = int(x[i-3])*10 + int(x[i-2])
    if s > 59:
        s -= 60
        m += 1
        if m > 59:
            m -= 60
            x[i-5] = str(int(x[i-5]) + 1)

    if s > 9:
        x[i]    = str(s)[0]
        x[i+1]  = str(s)[1]
    else:
        x[i]    = "0"
        x[i+1]  = str(s)

    if m > 9:
        x[i-3]  = str(m)[0]
        x[i-2]  = str(m)[1]
    else:
        x[i-3]  = "0"
        x[i-2]  = str(m)

def minus(i):
    s = int(x[i])*10 + int(x[i+1]) - k
    m = int(x[i-3])*10 + int(x[i-2])
    if s < 0:
        s = 60 + s
        m -= 1
        if m == -1:
            m = 59
            x[i-5] = str(int(x[i-5]) - 1)

    if s > 9:
        x[i]    = str(s)[0]
        x[i+1]  = str(s)[1]
    else:
        x[i]    = "0"
        x[i+1]  = str(s)

    if m > 9:
        x[i-3]  = str(m)[0]
        x[i-2]  = str(m)[1]
    else:
        x[i-3]  = "0"
        x[i-2]  = str(m)


f = open("input.txt", "r",encoding="utf-8")
ap = open("output.txt", "a", encoding="utf-8")


for x in f:
    #x = x.strip('\u200b')
    if len(x) == 30 and x[2] == ":":
        x = list(x)
        minus(6)
        minus(23)
        ap.write("".join(x))
    else: ap.write(x)

f.close()
ap.close()
