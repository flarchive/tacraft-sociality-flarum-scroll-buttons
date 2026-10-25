import Extend from 'flarum/common/extenders';
import app from 'flarum/admin/app';

export default [
  new Extend.Admin()
    .setting(() => ({
      setting: 'tacraft-sociality-scroll-buttons.scroll-to-top-button',
      label: app.translator.trans('tacraft-sociality-scroll-buttons.admin.scroll_to_top_label'),
      help: app.translator.trans('tacraft-sociality-scroll-buttons.admin.scroll_to_top_help'),
      type: 'boolean',
    }))
    .setting(() => ({
      setting: 'tacraft-sociality-scroll-buttons.scroll-to-bottom-button',
      label: app.translator.trans('tacraft-sociality-scroll-buttons.admin.scroll_to_bottom_label'),
      help: app.translator.trans('tacraft-sociality-scroll-buttons.admin.scroll_to_bottom_help'),
      type: 'boolean',
    })),
];