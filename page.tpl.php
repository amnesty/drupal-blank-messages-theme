<head>
    <?php print $styles; ?>
    <?php print $scripts; ?>
</head>
<body>
    <div id="page">
        <div id="content" class="clearfix">
            <?php if ($messages): ?>
                <div id="messages">
                    <div id="console" class="section clearfix">
                        <?php print $messages; ?>
                    </div>
                </div>
            <?php endif; ?>

            <div id="content-area"><?php print render($page['content']); ?></div>
        </div>
    </div>
</body>
