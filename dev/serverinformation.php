<h2><?php __('Server information'); ?></h2>

<h3><?php __('Processor information'); ?></h3>
<pre>
  <?php
    echo system('cat /proc/cpuinfo');
  ?>
</pre>

<h3><?php __('Ram information'); ?></h3>
<pre>
  <?php
    echo exec('free');
  ?>
</pre>