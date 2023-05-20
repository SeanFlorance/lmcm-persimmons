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
                <select class="drop_down" name="market_location" required>
                    <option value="display"><?php echo htmlspecialchars($consignment[3]) ?></option>
                </select>
            </div>
        </div>
        <div class="consignment_box">
            <h2>Entries</h2>
            <div id="review_main">
                <div class="input_container">
                    <?php if ($entries) : ?>
                        <table class='result_table'>
                            <tbody>
                                <tr>
                                    <th>Entry ID</th>
                                    <th>Fruit Variety</th>
                                    <th>Fruit Size</th>
                                    <th>Package Type</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                <?php foreach ($entries as $entry) : ?>
                                        <td><?php echo htmlspecialchars($entry[0]); ?></td>
                                        <td><?php echo htmlspecialchars($entry[1]); ?></td>
                                        <td><?php echo htmlspecialchars($entry[2]); ?></td>
                                        <td><?php echo htmlspecialchars($entry[3]); ?></td>
                                        <td><?php echo htmlspecialchars($entry[4]); ?></td>
                                        <td><?php echo htmlspecialchars($entry[5]); ?></td>
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
