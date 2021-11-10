<form class="report-form" method='POST' action='index.php?controller=report&action=created'>
    <h1 class="title">Report a rescue</h1>
    <div class="form-grp">
        <div>
            <p>Full name</p>
            <input type="text" name="full_name" required>
        </div>
        <div>
            <p>Email</p>
            <input type="text" name="email" required>
        </div>
    </div>
    <div class="form-grp">
        <div>
            <p>Mobile</p>
            <input type="text" name="mobile" required>
        </div>
        <div>
            <p>Type of aniaml</p>
            <input type="text" name="type_animal" required>
        </div>
    </div>
    <div class="form-grp">
        <div>
            <p>Is the animal friendly or aggressive</p>
            <input type="text" name="animal_mental" required>
        </div>
        <div>
            <p>Does the animal eats/drinks water?</p>
            <input type="text" name="animal_body" required>
        </div>
    </div>
    <button class="btn" type="submit">Submit</button>
</form>