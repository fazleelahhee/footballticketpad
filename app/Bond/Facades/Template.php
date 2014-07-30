<?php namespace Bond\Facades;

use Illuminate\Support\Facades\Facade;
use Config;
use Cache;
use Carbon\Carbon;

class Template extends Facade {
    private static $templates = array();
    private static $theme = '';
    private static $cacheKey = 'bm-theme-config';

    public static function name($format='') {
        if(empty(static::$theme)) {
            static::$theme = Config::get('bondcms.theme');
        }
        return sprintf($format, static::$theme);
    }

    public static function getTemplates() {
        if(empty(static::$templates)) {
            static::$templates = static::getTemplateConfig()['templates'];
        }
        return static::$templates;
    }

    public static function getTemplate($templateName = 'default') {
        $templates = static::getTemplates();
        return str_replace(['.blade.php', '.php'],'',$templates[$templateName]);
    }

    private static function getTemplateConfig() {
        $paths = Config::get('view.paths');
        $themeConfig = Cache::get(static::$cacheKey);
        if($themeConfig) {
            return $themeConfig;
        }
        $expiresAt = Carbon::now()->addMinutes(60);
        $themeConfig = $paths[0].DIRECTORY_SEPARATOR.
            'frontend'.DIRECTORY_SEPARATOR.Config::get('bondcms.theme').DIRECTORY_SEPARATOR."config.json";

        if(file_exists($themeConfig)) {
            $themeConfig = file_get_contents($themeConfig);
            $themeConfig = json_decode($themeConfig, true);
            Cache::put(static::$cacheKey, $themeConfig, $expiresAt);
            return $themeConfig;
        }
        return ['templates' =>  [] ] ;
    }
}

?>

<?php foreach( $review_metadata as $meta ): ?>
    <?php $entry_meta = _review_meta($review_id, $meta); ?>
    <?php if( !is_null( $entry_meta ) && $entry_meta != '' && $meta != 'rating' ): ?>
        <li id="meta-<?php echo $meta; ?>" class="meta-tag">
            <?php if( !in_array( $meta, array( 'venue', 'start', 'end' ) ) ): ?>
                <span class="key"><?php echo ucfirst( str_replace('_', ' ', $meta ) ); ?>:</span>
            <?php endif; ?>
            <?php if( !in_array( $meta, array( 'start', 'end' ) ) ): ?>
                <span class="value"><?php echo $entry_meta; ?></span>
            <?php else: ?>
                <?php if( $meta == 'start' ): ?>
                    <span class="value date review-dates">
													<span class="start"><?php echo date( "M j", strtotime( _review_meta($review_id, 'start') ) ); ?></span>
													<span>to</span>
													<span class="end"><?php echo date( "M j", strtotime( _review_meta($review_id, 'end') ) ); ?></span>
												</span>
                    <div class="details_divider"></div>
                <?php endif; ?>
            <?php endif; ?>
        </li>
    <?php endif; ?>
<?php endforeach; ?>
