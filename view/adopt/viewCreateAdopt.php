
<form action="index.php?controller=adopt&action=created" class="adopt-form" method='POST'>
    <h1 class="title">Adopt</h1>
    <div>
        <p>Full name</p>
        <input type="text" name="full_name" required>
    </div>
    <div>
        <p>Email</p>
        <input type="email" name="email" required>
    </div>
    <div>
        <p>Mobile</p>
        <input type="text" name="mobile" required>
    </div>
    <div>
        <p>Date</p>
        <input type="date" name="date" required>
    </div>
    <div>
        <p>Time</p>
        <select name="time">
            <option value="09:00 a.m" selected>09:00 a.m</option>
            <option value="10:00 a.m">10:00 a.m</option>
            <option value="11:00 a.m">11:00 a.m</option>
        </select>
    </div>
    <button class="btn" type="submit">Submit</button>
</form>
