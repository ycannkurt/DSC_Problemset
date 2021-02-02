#author: Y.Can KURT
print("FizzBuzz'a hoşgeldin! Öncelikle başlangıç ve son sayısını gir; unutma, sayılar 0-100 arasında olmalı!")

startNum =0
endNum = 0

while (True):
    startNum = int(input("Başlangıç sayısını girin: "))
    endNum = int(input("Son sayısını girin: "))
    if (startNum and endNum > 0)and(startNum and endNum < 100)and(startNum < endNum):
        for i in range(startNum, endNum + 1):
            if (i % 3 == 0 and i % 5 == 0):
                print("FizzBuzz")
            elif (i % 3 == 0):
                print("Fizz")
            elif (i % 5 == 0):
                print("Buzz")
            else:
                print(i)
        break


    else: print("Sayılarınız 0-100 arasında ve başlangıç sayısı son sayıdan küçük olmalı. Tekrar sayı girin!")