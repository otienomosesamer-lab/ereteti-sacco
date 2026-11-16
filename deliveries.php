<?php
$page_title = 'Deliveries';
include 'includes/header.php';
?>
    <div class="page-content">
    <main>
        <h2>Milk received at Olepolos centre</h2>
        <p>Milk received on the Kiserian route, Monday 12 October 2026. Both sessions are listed: the morning collection from 6.30am and the evening collection from 4.00pm.</p>
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
                    <tr>
                        <td>ER-0001</td><td>Peter Mwangi</td><td>Morning</td><td>5.38</td><td>Yes</td>
                    </tr>
                    <tr>
                        <td>ER-0002</td><td>Peter Mwangi</td><td>Evening</td><td>4.29</td><td>Yes</td>
                    </tr>
                    <tr>
                        <td>ER-0003</td><td>Grace Wanjiku</td><td>Morning</td><td>4.39</td><td>Yes</td>
                    </tr>
                    <tr>
                        <td>ER-0004</td><td>Grace Wanjiku</td><td>Evening</td><td>3.02</td><td>Yes</td>
                    </tr>
                    <tr>
                        <td>ER-0005</td><td>Joseph Kamau</td><td>Morning</td><td>7.73</td><td>No</td>
                    </tr>
                    <tr>
                        <td>ER-0006</td><td>Joseph Kamau</td><td>Evening</td><td>6.75</td><td>Yes</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" scope="row">Accepted today</th>
                        <td>23.83 litres</td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>
<?php include 'includes/footer.php'; ?>
