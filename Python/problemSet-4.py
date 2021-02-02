#author: Y.Can KURT
def theBiggestOdd(list):
    maxNumber = list[0]

    for i in range(len(list)):
        if (int(list[i]) % 2 == 1 and int(maxNumber) <= int(list[i])):
            maxNumber = list[i]
    print("Dizideki en büyük tek sayı: ",maxNumber)




if __name__ == '__main__':
    input_string = input("Liste elemanlarını boşluk kullanarak giriniz: ")
    userList = input_string.split()
    print("Oluşturduğunuz liste: ", userList)
    theBiggestOdd(userList)