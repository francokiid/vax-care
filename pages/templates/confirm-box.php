<div class="modal" id="confirm-box">
    <section class="modal-content">
        <header class="form-header">
            <h2>Confirm <?php echo $title; ?></h2>
        </header>
        <br>
        <?php echo $prompt; ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="hidden" name="recipient-type" value="<?php echo $recipientType?>">
            <div class="modal-buttons">
                <button type="button" name="cancel" id="cancel-btn" class="light-btn" onclick="closeConfirmBox();">Cancel</button>
                <button type="submit" name="disable" id="confirm-btn" class="dark-btn">Confirm</button>
            </div>
        </form>
    </section>
</div>