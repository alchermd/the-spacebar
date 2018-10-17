# The Spacebar

A code along through [Symfonycasts](https://symfonycasts.com) _Learn Symfony_ track.

## Notes

- The base `symfony/skeleton` install is essentially a small route-controller system. The routes are defined at `config/routes.yaml` and the controllers reside at the `src/Controller` directory.
- An alternative routing method is to use the `Symfony\Component\Routing\Annotation\Route` annotation and define the route alongside the controller.

```php
class ArticleController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function homepage()
    {
        return new Response('hello, world!');
    }
}
```

- The router also supports wildcards like:

```php
class ArticleController
{
    ...
    
    /**
     * @Route("/news/{slug}")
     *
     * @param $slug
     *
     * @return Response
     */
    public function show(string $slug)
    {
        return new Response('The slug is: '.$slug);
    }
}
```

- The [Symfony Flex](https://symfony.sh/) system is a tool for installing related packages. The system gives packages an alias (like `annotations` for `doctrine/annotations`) and a recipe which triggers actions after installing the said package.

- Symfony uses (by default) [Twig](http://twig.symfony.com) as its templating system. The docs are straightforward so go read that one. It looks and feels like [Jinja](http://jinja.pocoo.org/docs/2.10/)!

## License

Released under the [MIT License](LICENSE)