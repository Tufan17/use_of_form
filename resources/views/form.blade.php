<!doctype html>
<html>
    <head>
        <meta charset="uf-8">
        <title>Form Sayfaı</title>
    </head>

    <body>

        <form action="{{ route("sonuc") }}" method="POST">
            @csrf
            <textarea name="metin" id="" cols="30" rows="10" style="width: 300; height: 300">
            </textarea>
            <br>    
            <input type="submit" value="Gönder" name="ilet">
        </form>



    </body>
</html>