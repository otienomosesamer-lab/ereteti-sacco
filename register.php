<?php
$page_title = 'Apply for membership';
include 'includes/header.php';
?>
    <div class="page-content">
    <main>
        <h2>Join Ereteti Dairy Sacco</h2>
        <p>Any dairy farmer within reach of one of our three routes may apply to join Ereteti. You will need your national ID number and a phone we can reach you on. Once your membership number is issued you may deliver from that day, and you are paid once a month for the litres we accept.</p>
        <form action="process-register.php" method="post">
            <fieldset>
                <legend>Your details</legend>
                <label for="fname">First name</label>
                <input type="text" id="fname" name="first_name" autocomplete="given-name" required>
                <label for="lname">Last name</label>
                <input type="text" id="lname" name="last_name" autocomplete="family-name" required>
                <label for="national-id">National ID</label>
                <input type="text" id="national-id" name="national_id" inputmode="numeric" required>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="07xxxxxxxx" pattern="07[0-9]{8}" title="Ten digits, starting 07" autocomplete="tel" required>
            </fieldset>
            <fieldset>
                <legend>Your route</legend>
                <label for="route">Route</label>
                <select name="route" id="route" required>
                    <option value="">Choose a route</option>
                    <option value="kiserian">Kiserian</option>
                    <option value="ngong">Ngong</option>
                    <option value="rongai">Rongai</option>
                </select>
                <label for="date">Date of joining</label>
                <input type="date" id="date" name="date_joined" required>
            </fieldset>
            <label class="checkbox-label">
                <input type="checkbox" id="rules" name="rules" required>
                I accept the Sacco's rules
            </label>
            <button type="submit">Apply to join</button>
        </form>
    </main>
<?php include 'includes/footer.php'; ?>
