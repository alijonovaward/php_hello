<h1>Hello Laravel</h1>
<p>Bu mening birinchi sahifam</p>


<h1>Message yuborish</h1>

<form action="/message" method="POST">
    @csrf
    <input type="text" name="text" placeholder="Text yozing">

    <button type="submit">Send</button>
</form>
