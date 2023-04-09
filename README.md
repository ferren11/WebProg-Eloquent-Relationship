Felicia Ferren - 2440013071

## Pemanasan Sebelum Ujian

Pada kasus ini, ditampilkan halaman berupa order list dari sebuah website online store bernama SMTOWN. 
Di dalamnya, terdapat sebuah table yang merupakan gabungan dari table berikut:
1. **User**: detail user/customer online store SMTOWN. (dalam kolom ```Name``` dan ```Details```)
2. **UserMembership**: detail jenis membership dari setiap user/customer online store SMWTOWN. (dalam kolom ```Membership Type```)
3. **Order**: detail order yang terlah dilakukan oleh user/customer online store SMTOWN dalam kurun waktu 30 hari terakhir. (dalam kolom ```Order List```)
yang mana variabel di dalamnya digenerate menggunakan "faker" function.

### Relationship yang diterapkan:
- **One to one**: Setiap **user** memiliki HANYA 1 **tipe membership**.
- **One to many**: Setiap **user** memiliki 3 order yang terdata dalam database.

## View
Berikut ini adalah tampilan akhirnya: 
![Webpage-Display](https://github.com/ferren11/WebProg-Eloquent-Relationship/blob/master/resources/webpage-display.png)

