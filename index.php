<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php 通用唯一识别码 UUID 扩展:uuidpp</title>
    </head>
    <body>
        <div>
            <h3>依据时间</h3>
            <?php for ($i = 0; $i < 10; ++$i): ?>
                <p><?php echo uuidpp::create_by_time(); ?></p>
                <?php sleep(0.001); ?>
            <?php endfor; ?>
        </div>
        <div>
            <h3>依据uri</h3>
            <p><?php echo uuidpp::create_by_uri('http://www.wqbuyer.com'); ?></p>
        </div>
        <div>
            <h3>依据随机数</h3>
            <?php for ($i = 0; $i < 10; ++$i): ?>
                <p><?php echo uuidpp::create_by_random(); ?></p>
                <?php sleep(0.001); ?>
            <?php endfor; ?>
        </div>
    </body>
</html>
