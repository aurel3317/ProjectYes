function data() {
        var ret = [];
        ret.push({
          y: 'Today',
          a: <?php echo $text; ?>
        });
      return ret;
    }

var graph = Morris.Bar({
        element: 'graph',
        data: data(),
        xkey: 'y',
        ykeys: ['a'],
        labels: ['random label']
    });
   