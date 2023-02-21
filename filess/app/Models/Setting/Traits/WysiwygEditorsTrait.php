<?php
/**
 * LaraClassifier - Classified Ads Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Models\Setting\Traits;

trait WysiwygEditorsTrait
{
	/**
	 * @return array
	 */
	public static function wysiwygEditors()
	{
		return [
			'none'       => trans('admin.wysiwyg_editor_none'),
			'tinymce'    => trans('admin.wysiwyg_editor_tinymce'),
			'ckeditor'   => trans('admin.wysiwyg_editor_ckeditor'),
			'summernote' => trans('admin.wysiwyg_editor_summernote'),
			'simditor'   => trans('admin.wysiwyg_editor_simditor'),
		];
	}
}
