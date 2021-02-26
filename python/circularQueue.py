MAX = 10
q = [None]*MAX
a, b = MAX-1, MAX-1

q = [i for i in range(10)]
a, b = 8, 7

def enq():
    global a, b, q
    if (a,b) == (0,MAX-1):
        q[a] = int(input("a number plz: "))
        a, b = 1, 0
    elif (a,b) == (MAX-1, MAX-2):
        q[a] = int(input("a number plz: "))
        a, b = 0, MAX-1
    elif a-b == 1:
        q[a] = int(input("a number plz: "))
        a, b = a+1, b+1
    else:
        a-=1
        q[a] = int(input("a number plz: "))
        

def deq():
    global a, b, q
    if a == b:
        print("Error: empty")
        return
    q[a] = None
    a = a+1 if a != MAX-1 else 0
    
def show():
    global a, b, q
    for i in range(a , MAX):
        print(q[i], end=' ')
    if b < a:
        for i in range(a):
            print(q[i], end=' ')

if __name__ == "__main__":
    while True:
        print(f"\n{q}")
        while True:
            try:
                user = int(input("1. Enqueue\n2. Dequeue\n3. show\n=> "))
                break
            except:
                print("number required\n")
        if user == 1:
            enq()
        elif user == 2:
            deq()
        elif user == 3:
            show()
        else:
            print("123 plz")
        print(f"a={a}  b={b}")
