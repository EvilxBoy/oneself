#!/usr/bin/python
//利用for循环嵌套实现9*9乘法表
for i in range(1,10):
		for j in range(1,i+1):
			print j,'x',i,'=',j*i,'\t',
		print '\n'

//只需要一行就可以实现9*9乘法表的效果
print '\n'.join([''.join(['%s*%y=%-2s'%(x,y,x*y) for y in range(1,x+1)]) for x in range(1,10)]);
