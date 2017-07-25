# -*- coding: UTF-8 -*-  
import json, calendar, time, support, package # json 要导入才能用json

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
locq = 'lo'
# print var1[0:3] # loc
# print var1[:3] # loc
''' if (locq in var1):
    print 'in' '''

# 引用json

''' data = [{'a':"A",'b':(2,4),'c':3.0}]
print "DATA:",repr(data)
data_string = json.dumps(data)
print "JSON:",data_string '''


#  Lists
''' L = ['span', 'test', 'asd']
Q = [1, 2, 3]
M = L + Q
print M '''

# 元组
''' tup1 = ('phys', 'chemistry', 1997, 2000)
tup2 = (1, 2, 3, 4, 111)
del tup1
tup1 = ()
tup3 = tup1 + tup2
print max(tup2) '''


# dictionary

dict = {'Aclie': 123, 'lcoqj': 1235}
del dict['Aclie']
print dict

# time
ticks = time.time() # 时间戳

localtime = time.localtime(time.time())
print localtime[0]

cal = calendar.month(2018, 1)
print cal

# 函数
def printme( string ):
   val1 = "打印传入的字符串到标准显示设备上"
   return string + val1


print printme("asdasd")


#可写函数说明
def printinfo( name, age=20 ):
   "打印任何传入的字符串"
   print "Name: ", name
   print "Age ", age
  
#调用printinfo函数
printinfo("miki", 50)
printinfo(age=50, name="miki") #这样规定传入参数值，就不需要按照顺序写，只要知道参数名
printinfo(name="asdas") # 函数写了缺省就可以自定义函数个数

# 不定长参数
''' def testlength(name, *age):
    print "output"
    print name
    for n in age:
        print n

testlength('asdasdas', 1, 'asd', 'dasda')  '''#除了第一个为固定参数，其他的参数以数组的形式赋值给*age， *就代表不定参数，可能是一个或者多个



# lambda 好处减少代码环境污染，减少无用代码，注意不能用print在lambda  匿名函数（闭包）
''' sum = lambda age1, age2: age1 + age2
print sum(120,123)

support.print_func("locqj") '''


Money = 2000
def AddMoney():
    global Money #加上 global 就不会报错 -》全局变量, 不定义全局变量 函数外面识别不了Money
    Money = Money + 1 
print Money
AddMoney()
print Money

content = dir(package) # 输出import里面函数的名字
package.hellaa()

# I/O
str = raw_input("Enter your input:  ")
print "Received :", str