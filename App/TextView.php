<?php

namespace App;

class TextView
{
    /**
     * @var array $data
     */
    private array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return void
     */
    public function render() : void
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Display Data</title>
        </head>
        <body>
        <h1>Entered Data</h1>
        <p><?php echo htmlspecialchars($this->data['data'] ?? ''); ?></p>
        <div><a href="index.php">Back</a></div>
        </body>
        </html>
        <?php
    }
}
