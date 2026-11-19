<?php
require_once 'includes/db.php'; // 1 · CONNECT
$page_title = 'Deliveries';
$current_page = 'deliveries';
include 'includes/header.php';
// 2 · QUERY — every delivery on one day, with the farmer's number and name
$sql = "SELECT f.member_no, f.first_name, f.last_name, d.session, d.litres, d.accepted
FROM milk_delivery d
JOIN farmer f ON f.farmer_id = d.farmer_id
WHERE d.delivery_date = '2026-10-12'
ORDER BY f.member_no, d.session";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
?>
    <main>
<p><?php echo $count; ?> deliveries on this day.</p>
        <h2>Milk received at Olepolos centre</h2>
        <p>Milk received from all three routes — Kiserian, Ngong and Rongai — on Monday 12 October 2026. Both sessions are listed: the morning collection and the evening collection.</p>

        <!-- Lab 3 delivery form. NOTE: this form was rebuilt from main.js
             (it expects #member, #litres and #delivery-form) because the
             GitHub copy of deliveries.html had no form in it. If the copy
             on your laptop has a fuller form, keep yours instead. -->
        <form id="delivery-form" action="#" method="get">
            <label for="member">Member number</label>
            <input type="text" id="member" name="member" placeholder="ER-0001" required>
            <p id="member-message" aria-live="polite"></p>
            <label for="session">Session</label>
            <select id="session" name="session">
                <option value="morning">Morning</option>
                <option value="evening">Evening</option>
            </select>
            <label for="litres">Litres</label>
            <input type="number" id="litres" name="litres" min="0" step="0.01" required>
            <p id="litres-message" aria-live="polite"></p>
            <button type="submit">Record delivery</button>
            <p id="form-message" aria-live="polite"></p>
        </form>

        <section class="table-scroll" tabindex="0" aria-label="Milk deliveries table">
            <table>
                <caption>Milk received, Monday 12 October 2026</caption>
                <thead>
                    <tr>
                        <th scope="col">Member</th>
                        <th scope="col">Farmer</th>
                        <th scope="col">Session</th>
                        <th scope="col">Litres</th>
                        <th scope="col">Accepted</th>
                    </tr>
                </thead>
<tbody>
<?php
if ($count === 0) { // NEW
echo '<tr><td colspan="5">No deliveries recorded on this day.</td></tr>'; // NEW
} else { // NEW
// 3 · FETCH each row, and 4 · SHOW it as a table row
while ($row = mysqli_fetch_assoc($result)) {
// the database stores 1 or 0; the page says Yes or No
if ($row['accepted'] == 1) {
$accepted = 'Yes';
} else {
$accepted = 'No';
}
echo '<tr>';
echo '<td>' . $row['member_no'] . '</td>';
echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
echo '<td>' . ucfirst(strtolower($row['session'])) . '</td>';
echo '<td>' . $row['litres'] . '</td>';
echo '<td>' . $accepted . '</td>';
echo '</tr>';
}
} // NEW
?>
</tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" scope="row">Accepted today</th>
                        <td id="accepted-total"></td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>
    <aside>
        <h2>Collection sessions</h2>
        <p>Morning collection starts at 6.30am. Evening collection starts at 4.00pm at Olepolos centre.</p>
        <p><a href="routes.php">See all Kiserian collection centres</a></p>
    </aside>
<?php include 'includes/footer.php'; ?>
