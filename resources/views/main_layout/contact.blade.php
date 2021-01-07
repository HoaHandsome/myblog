<form method="POST" action="{{route('create_messenger')}}">
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="text" name="phone" placeholder="Your Phone Number">
    <input type="email" name="mail" placeholder="Your Email">
     <textarea name="messenger" aria-placeholder="Your messenger"></textarea>
    <input type="submit" value="submit">
    
</form>