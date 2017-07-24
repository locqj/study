# -*- coding: UTF-8 -*-  



# 循环
fruits = ['banana', 'apple',  'mango']
for index in range(len(fruits)):
   print 'Current fruit :'+'asd', fruits[index]
 
print "Good bye!"


# 多重循环
test = ['a', 'b', 'c']
test1 = [1, 2, 3]
new_list = []

for t in test:
    for m in test1:
        print '%s is a what, index equal %d' %(t, m)
        new_list.append([t, m])
    else:
        print 'in for'
else:
        print 'out for'
print new_list

# while 循环

''' i = 2
while(i < 20):
    j=2
    while(j <= (i/j)):
        if not(i%j):
            break
        j = j + 1
    if (j > i/j):
        print i, "是 素数"
    i = i + 1
print "good bye!" '''


for m in 'Python':
    if m == 'h':
        pass
        print 'this is block'
    print m


i = 2
j = 2
q = cmp(i, j) # 大于 1 等于 0 小于 -1
print q
if(i == j):
    print "eq"
else:
    print ""


# 字符串

var1 = 'locqj'
print var1[0:3] # loc
print var1[:3] # loc

