#author: Y.Can KURT
import re

requiredCharsOrder = '^[a-z0-9]+[-_]?[a-z0-9]+[@][a-z0-9]+[.]\w{2,3}$'

def check(email):
    if(ext_length==2):
        requiredCharsOrder = '^[a-z0-9]+[-_]?[a-z0-9]+[@][a-z0-9]+[.]\w{2,3}$'
        if(re.search(requiredCharsOrder, email)):
            print("Email adresi geçerli.")
        else:
            print("Email adresi geçerli değil.")
    else:
        requiredCharsOrder = '^[a-z0-9]+[-_]?[a-z0-9]+[@][a-z0-9]+[.]\w{2,3}[.]\w{2}$'
        if (re.search(requiredCharsOrder, email)):
            print("Email adresi geçerli.")
        else:
            print("Email adresi geçerli değil.")



if __name__ == '__main__':
    print("Uzantı uzunluğunu giriniz, minimum 2 maksimum 3 girilebilir: ")
    while(True):
        ext_length = int(input())
        if(ext_length<4 and ext_length>1): break
        else:
            print("Uzantı uzunluğunu minimum değerden az veya maksimum değerden fazla girdiniz, tekrar deneyin: ")
    email = str(input("Email adresinizin gerekli şartları sağlayıp/sağlamadığını öğrenmek için yazınız:"))
    check(email)