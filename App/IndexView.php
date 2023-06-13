<?php

namespace App;

class IndexView
{
    private ?string $csrfToken;

    public function __construct(?string $csrfToken = null)
    {
        $this->csrfToken = $csrfToken;
    }

    public function render() : void
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Enter Data</title>
        </head>
        <body>
        <form method="POST" action="index.php">
            <div>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($this->csrfToken); ?>">
            </div>
            <div>
                <textarea name="data" placeholder="Enter your data here"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
        </body>
        </html>
        <?php
    }
}
