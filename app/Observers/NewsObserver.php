<?php
namespace App\Observers;

use App\Models\News;

class NewsObserver {

    /*
     * Срабатывает перед записью новой страницы
     */
    public function creating(News $news) {
        $news->name = 'Перед созданием, ' . $news->name;
    }

    /*
     * Срабатывает при извлечении из базы данных
     */
    public function retrieved(News $news) {
        $news->name = ' -Obs- ' . $news->name;
    }

    /*
     * Срабатывает перед удалением страницы из БД
     */
    public function deleting(News $news) {
        return false;
    }
}
