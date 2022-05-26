<h1>Contact <?php echo $bag['name']; ?></h1>
<hr>

<form action="/contact" enctype="application/x-www-form-urlencoded" method="post">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Firstname, Lastname">
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <div class="form-group">
        <br/>
        <button type="submit" class=" btn btn-primary">Send</button>
    </div>
</form>