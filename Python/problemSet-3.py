#author: Y.Can KURT
def sort(sortedList, size):

    for i in range(size):
        for j in range(size - 1):
            if int(sortedList[i]) == 0:
                temp = sortedList[j]
                sortedList[j] = sortedList[i]
                sortedList[i] = temp

    print("0 ların başta sıralandığı liste: ", sortedList)




if __name__ == '__main__':
    input_string = input("Liste elemanlarını boşluk kullanarak giriniz: ")
    userList = input_string.split()
    print("Oluşturduğunuz liste: ", userList)
    sort(userList, int(len(userList)))
