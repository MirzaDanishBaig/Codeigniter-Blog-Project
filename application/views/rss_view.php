<?php echo '<'.'?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';?>
<?php header("Content-type: text/xml"); ?>
<rss version="2.0">
<channel>
<title><?php echo $this->config->item('title'); ?></title>
<link><?php echo base_url(); ?></link>
<description><?php echo $this->config->item('sub_title'); ?></description>
<?php foreach ($articles as $article) { ?> 
<item>
<title><?php echo $article['title']; ?></title>
<link><?php echo base_url(); ?>blog/<?php echo $article['slug']; ?></link>
<guid><?php echo base_url(); ?>blog/<?php echo $article['slug']; ?></guid>
<description><![CDATA[<?php $body = substr($article['body'],0,200); echo $body; ?>...]]></description>
</item>
<?php } ?>
</channel>
</rss>