class Employee:
    'Common base class for all employeees'
    empCount = 0

    def __init__(self, name, salary):
        self.name = name
        self.salary = salary
        Employee.empCount += 1
    
    def displayCount(self):
        print "Total Employee %d", Employee.empCount

    def displayEmployee(self):
        print "Name: ", self.name, ", Salary", self.salary


emp1 = Employee("zz", 1233)

emp2 = Employee("zz", 1233)

emp1.age = 10

emp1.displayEmployee()
# emp2.displayEmployee()
print "Total Employee %d" % Employee.empCount
print "age %d" % emp1.age


