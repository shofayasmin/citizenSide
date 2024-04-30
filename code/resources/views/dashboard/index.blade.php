<h1>Hey, welcome {{ auth()->user()->username }}, this is the soon to be dashboard</h1>
<form action="/logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
