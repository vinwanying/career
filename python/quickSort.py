#python_version == '3.7'
def quicksort(a):
    if a == []:
        return []
    result = quicksort([i for i in a[1:] if i < a[0]]) + [a[0]] + quicksort([i for i in a[1:] if i >= a[0]])
    return result
