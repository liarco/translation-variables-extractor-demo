<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use function Symfony\Component\Translation\t;

/*
 * TODO: add examples for new TranslatableMessage(...)
 */
class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index(TranslatorInterface $translator): Response
    {
        return $this->render('test/index.html.twig', [
            'supported_translations' => [
                $translator->trans('ND_php_trans_empty'),
                $translator->trans('ND_php_trans_empty_array', []),
                $translator->trans('ND_php_trans_with_param_one_line', ['var1' => 'val1']),
                $translator->trans('ND_php_trans_with_params_one_line_no_trailing_comma', ['var1' => 'val1', 'var2' => 'val2']),
                $translator->trans('ND_php_trans_with_params_one_line_with_trailing_comma', ['var1' => 'val1', 'var2' => 'val2',]),
                $translator->trans('ND_php_trans_with_param_with_whitespaces', [
                    'var1' => 'val1'
                ]),
                $translator->trans('ND_php_trans_with_params_with_whitespaces_no_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2'
                ]),
                $translator->trans('ND_php_trans_with_params_with_whitespaces_with_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2',
                ]),
            ],
            'unsupported_translations' => [
                t('ND_php_t_empty'),
                t('ND_php_t_empty_array', []),
                t('ND_php_t_with_param_one_line', ['var1' => 'val1']),
                t('ND_php_t_with_params_one_line_no_trailing_comma', ['var1' => 'val1', 'var2' => 'val2']),
                t('ND_php_t_with_params_one_line_with_trailing_comma', ['var1' => 'val1', 'var2' => 'val2',]),
                t('ND_php_t_with_param_with_whitespaces', [
                    'var1' => 'val1'
                ]),
                t('ND_php_t_with_params_with_whitespaces_no_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2'
                ]),
                t('ND_php_t_with_params_with_whitespaces_with_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2',
                ]),
            ],
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
                $translator->trans('D_php_trans_empty', [], 'my-domain'),
                $translator->trans('D_php_trans_with_param_one_line', ['var1' => 'val1'], 'my-domain'),
                $translator->trans('D_php_trans_with_params_one_line_no_trailing_comma', ['var1' => 'val1', 'var2' => 'val2'], 'my-domain'),
                $translator->trans('D_php_trans_with_params_one_line_with_trailing_comma', ['var1' => 'val1', 'var2' => 'val2',], 'my-domain'),
                $translator->trans('D_php_trans_with_param_with_whitespaces', [
                    'var1' => 'val1'
                ], 'my-domain'),
                $translator->trans('D_php_trans_with_params_with_whitespaces_no_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2'
                ], 'my-domain'),
                $translator->trans('D_php_trans_with_params_with_whitespaces_with_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2',
                ], 'my-domain'),
            ],
            'unsupported_translations' => [
                t('D_php_t_empty'),
                t('D_php_t_empty_array', []),
                t('D_php_t_with_param_one_line', ['var1' => 'val1']),
                t('D_php_t_with_params_one_line_no_trailing_comma', ['var1' => 'val1', 'var2' => 'val2']),
                t('D_php_t_with_params_one_line_with_trailing_comma', ['var1' => 'val1', 'var2' => 'val2',]),
                t('D_php_t_with_param_with_whitespaces', [
                    'var1' => 'val1'
                ]),
                t('D_php_t_with_params_with_whitespaces_no_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2'
                ]),
                t('D_php_t_with_params_with_whitespaces_with_trailing_comma', [
                    'var1' => 'val1',
                    'var2' => 'val2',
                ]),
            ],
        ]);
    }
}
