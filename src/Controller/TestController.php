<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index(TranslatorInterface $translator): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'supported_translations' => [
                $translator->trans('php_empty'),
                $translator->trans('php_empty_array', []),
                $translator->trans('php_with_param_one_line', ['var1' => 'val1']),
                $translator->trans('php_with_params_one_line_no_trailing_comma', ['var1' => 'val1', 'var2' => 'val2']),
                $translator->trans('php_with_params_one_line_with_trailing_comma', ['var1' => 'val1', 'var2' => 'val2',]),
                $translator->trans('php_with_param_with_whitespaces', [
                    'var1' => 'val1'
                ]),
                $translator->trans('php_with_params_with_whitespaces_no_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2'
                ]),
                $translator->trans('php_with_params_with_whitespaces_with_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2',
                ]),
            ],
            'unsupported_translations' => [],
        ]);
    }
    /**
     * @Route("/domain", name="domain")
     */
    public function domain(TranslatorInterface $translator): Response
    {
        return $this->render('test/domain.html.twig', [
            'controller_name' => 'TestController',
            'supported_translations' => [
                $translator->trans('php_empty', [], 'my-domain'),
                $translator->trans('php_with_param_one_line', ['var1' => 'val1'], 'my-domain'),
                $translator->trans('php_with_params_one_line_no_trailing_comma', ['var1' => 'val1', 'var2' => 'val2'], 'my-domain'),
                $translator->trans('php_with_params_one_line_with_trailing_comma', ['var1' => 'val1', 'var2' => 'val2',], 'my-domain'),
                $translator->trans('php_with_param_with_whitespaces', [
                    'var1' => 'val1'
                ], 'my-domain'),
                $translator->trans('php_with_params_with_whitespaces_no_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2'
                ], 'my-domain'),
                $translator->trans('php_with_params_with_whitespaces_with_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2',
                ], 'my-domain'),
            ],
            'unsupported_translations' => [],
        ]);
    }
}
