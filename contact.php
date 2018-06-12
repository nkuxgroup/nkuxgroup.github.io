<?php include 'header.php';?>

<div class="contact">
    <div class="events-header text-center container">
        <div class="row">
            <div class="col">
                <h1>Upcoming Events</h1>
            </div>
        </div>
    </div>
    <div class="events-container container">
        <form>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jane.doe@email.com">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Shh don't tell anyone">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="I'm interested in learning more about NKUX!"></textarea>
                    </div>
                    <button type="submit" class="btn btn-yellow">SEND</button>
                    
                </div>
            </div>
        </form>
    </div>
</div>



<?php include 'footer.php';?>