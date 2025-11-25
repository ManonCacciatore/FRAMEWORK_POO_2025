            <!-- ASIDE CATEGORIES -->
            <aside class="space-y-4">
                <?php
                $categories = \App\Models\CategoriesRepository::findAll();
                include_once '../app/views/categories/_index.php'; ?>

            </aside>