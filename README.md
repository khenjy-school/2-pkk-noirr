# Dokumentasi Noirr

## Projek Produk Kreatif

Dokumentasi ini berisi hal-hal yang berhubungan dengan projek noirr.

Anggota Kelompok 4 :

1. Efrend
2. Khenjy
3. Markus
4. Natasha

Tema Pekerjaan Kelompok : Website Official Youtuber Gaming

Link Edit Desain Figma : <https://www.figma.com/file/zuBA1UKYhs3TGtYajMJ4iO/webpkk?node-id=0%3A1>

> Berisi desain yang sedang dikerjakan oleh kelompok ini.

Link Edit Data Noirr : <https://github.com/Produk-Kreatif-XI-RPL/noirr-data>

> Berisi bahan-bahan yang akan dipakai dalam repository noirr.

Link Edit Repository : <https://github.com/Produk-Kreatif-XI-RPL/noirr>

> Berisi projek yang sedang dikerjakan oleh kelompok ini.

## Keterangan Isi Folder yang dipakai Dalam Repository Noirr

### assets

Berisi folder-folder yang digunakan sebagai bahan dari web.

1. css
   > Berisi css-css yang digunakan dalam membuat desain \* noirr.css

2. icon
   > Berisi icon-icon yang digunakan sebagai button, berekstensi svg
   - btnprofile.svg
   - btnback.svg
   - btnforward.svg
   - btndownload.svg
   - btnmessage.svg
   - btnfavorites.svg
   - btnnotification.svg
   - btnkart.svg
   - btnhelp.svg
   - btnup.svg
   - checkbox.svg
   - checkboxfill.svg

3. img
   > Berisi gambar-gambar berekstensi jpg atau png untuk digunakan dalam website

### controllers

1. application\controllers\Bill.php
2. application\controllers\Checkout.php
3. application\controllers\index.html
4. application\controllers\Main.php
5. application\controllers\Member.php
6. application\controllers\Merch.php
7. application\controllers\Welcome.php

### model

1. application\models\Bill_mdl.php
2. application\models\index.html
3. application\models\Member_mdl.php
4. application\models\Merch_mdl.php

### views

1. admin
   > Berisi halaman-halaman yang ditujukan untuk admin saja
   - application\views\admin\_partials
      1. application\views\admin\_partials\data_merchsold.php
      2. application\views\admin\_partials\data_subscriber.php
      3. application\views\admin\_partials\form_editbill.php
      4. application\views\admin\_partials\form_editmember.php
      5. application\views\admin\_partials\table_bill.php
      6. application\views\admin\_partials\table_member.php
      7. application\views\admin\_partials\table_merch.php
      8. application\views\admin\_partials\footeradm.php
      9. application\views\admin\_partials\headeradm.php
   - application\views\admin\index_bill.php
   - application\views\admin\index_member.php
   - application\views\admin\index.merch.php
   - application\views\admin\index.php

2. member
   > Berisi halaman-halaman yang ditujukan untuk member saja
   - application\views\member\_partials
      1. application\views\member\_partials\form_checkout.php
      2. application\views\member\_partials\form_favorites.php
      3. application\views\member\_partials\table_favorites.php
      4. application\views\member\_partials\footer.php
      5. application\views\member\_partials\header.php
   - application\views\member\checkout.php
   - application\views\member\member.php
   - application\views\member\payoutput.php

3. public
   > Berisi halaman-halaman yang ditujukan untuk public
   - application\views\public\_partials
      1. application\views\public\_partials\form_login.php
      2. application\views\public\_partials\form_signup.php
      3. application\views\public\_partials\footer.php
      4. application\views\public\_partials\header.php
   - application\views\public\about.php
   - application\views\public\error.php
   - application\views\public\index.php
   - application\views\public\login.php
   - application\views\public\merch.php
   - application\views\public\signup.php
