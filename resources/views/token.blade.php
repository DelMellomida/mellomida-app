<form method="POST" action="/token">
    @csrf

    Search Term: <input type="text" name="term" value="">
    <input type="submit" value="Submit">
</form>