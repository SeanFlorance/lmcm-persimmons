<?php include '../view/grower_consignment/header_consignment.php' ?>

<main>
    <section>
        <header id="head">
            <h2>Consignment Review</h2>
        </header>
        <form id="review_form">
            <div class="form_box">
                <div id="consignment_start" class="consignment_box">
                    <div class="consignment_details">
                        <label class="label_name" for="consignment_date">Consignment Date</label>
                        <label><?php echo htmlspecialchars($consignment[2]) ?></label><br>
                    </div>
                    <div class="consignment_details">
                        <label class="label_name" for="market_location">Market Location</label>
                        <div><?php echo htmlspecialchars($consignment[3]) ?></div>
                        </select>
                    </div>
                </div>
                <div class="consignment_box">
                    <h2>Entries</h2>
                    <div id="review_main">
                        <?php if ($entries) : ?>
                            <table class="results_table">
                                <tbody>
                                    <tr>
                                        <th>Fruit Variety</th>
                                        <th>Fruit Size</th>
                                        <th>Package Type</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                    <?php foreach ($entries as $entry) : ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($entry[0]); ?></td>
                                            <td><?php echo htmlspecialchars($entry[1]); ?></td>
                                            <td><?php echo htmlspecialchars($entry[2]); ?></td>
                                            <td><?php echo htmlspecialchars($entry[3]); ?></td>
                                            <td><?php echo htmlspecialchars($entry[4]); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="logout" class="button_box">
                <button type="button" onclick="window.location.href='grower_consignment_controller.php';">
                    Edit Consignment
                </button> <br>
                <button type="button" onclick="window.location.href='grower_consignment_controller.php?action=submit_consginment';">
                    Submit
                </button>
            </div>
            </div>
        </form>
    </section>
</main>
<script type="text/javascript" src="../js/grower_consignment.js"></script>
<?php include '../view/common/footer.php' ?>