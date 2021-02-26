import p1, p2

x = ['python is cool',
'pythom is a large heavy-bodied snake',
'The python course is worse taking',
'python python python python']
print(p2.low_freq_word_count(x, 'python', 20, 4))
print(p2.low_freq_word_count(x, 'pytho', 20, 4))
print(p2.low_freq_word_count(x, 'CUHK', 20, 4))

import p3, p4
print(p4.get_average_grades())

x = 'Dont_Hand_in_Me.csv'
with open(x, 'w') as f:
    f.write('10,20,30,-1\n20,25,-1,90')
print(p4.get_average_grades(x))
