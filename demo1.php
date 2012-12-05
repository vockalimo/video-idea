<html>
<body>
<div id="demo">
DEMO
</div>

<script type="text/javascript" src="/video-idea/yui-min.js"></script>
<script>
YUI().use('node', function(Y) {
    Y.one('#demo').set('innerHTML','<h1>Hello</h1>');
//    Y.one('#demo').append('<h1>Hello</h1>');

});
</script>
</body>
</html>
