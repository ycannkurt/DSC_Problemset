sayi =input("Lütfen sayıları boşluk kullanarak giriniz: ")
sayi_listesi = list(sayi.split())
print(sayi_listesi)
for i in range(len(sayi_listesi)):
  if int(sayi_listesi[i]) == 0:
      sayi_listesi.pop(i)
      sayi_listesi.insert(0, 0)

print(sayi_listesi)