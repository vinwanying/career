#python_version == '3.7'
def get_average_grades(filename='grades.csv'):
    from csv import reader
    with open(filename, newline='') as f:
        d = [r for r in reader(f)]
    average_grades_list = list(map(lambda c: sum(c)/len(c),
            [[float(r[c]) for r in d if r[c]!='-1'] for c in range(4)]))
    return average_grades_list
