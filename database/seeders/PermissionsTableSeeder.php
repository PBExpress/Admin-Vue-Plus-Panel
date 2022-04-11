<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'project_access',
            ],
            [
                'id'    => 18,
                'title' => 'note_create',
            ],
            [
                'id'    => 19,
                'title' => 'note_edit',
            ],
            [
                'id'    => 20,
                'title' => 'note_show',
            ],
            [
                'id'    => 21,
                'title' => 'note_delete',
            ],
            [
                'id'    => 22,
                'title' => 'note_access',
            ],
            [
                'id'    => 23,
                'title' => 'document_create',
            ],
            [
                'id'    => 24,
                'title' => 'document_edit',
            ],
            [
                'id'    => 25,
                'title' => 'document_show',
            ],
            [
                'id'    => 26,
                'title' => 'document_delete',
            ],
            [
                'id'    => 27,
                'title' => 'document_access',
            ],
            [
                'id'    => 28,
                'title' => 'task_access',
            ],
            [
                'id'    => 29,
                'title' => 'info_create',
            ],
            [
                'id'    => 30,
                'title' => 'info_edit',
            ],
            [
                'id'    => 31,
                'title' => 'info_show',
            ],
            [
                'id'    => 32,
                'title' => 'info_delete',
            ],
            [
                'id'    => 33,
                'title' => 'info_access',
            ],
            [
                'id'    => 34,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 35,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 36,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 37,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 38,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 40,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 41,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 42,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 43,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 44,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 45,
                'title' => 'product_create',
            ],
            [
                'id'    => 46,
                'title' => 'product_edit',
            ],
            [
                'id'    => 47,
                'title' => 'product_show',
            ],
            [
                'id'    => 48,
                'title' => 'product_delete',
            ],
            [
                'id'    => 49,
                'title' => 'product_access',
            ],
            [
                'id'    => 50,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 51,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 52,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 53,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 54,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 55,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 56,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 57,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 58,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 59,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 60,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 61,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 62,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 63,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 64,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 65,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 66,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 67,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 68,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 69,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 70,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 71,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 72,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 73,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 74,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 75,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 76,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 77,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 78,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 79,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 80,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 81,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 82,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 83,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 84,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 85,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 86,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 87,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 88,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 89,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 90,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 91,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 92,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 93,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 94,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 95,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 96,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 97,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 98,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 99,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 100,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 101,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 102,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 103,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 104,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 105,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 106,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 107,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 108,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 109,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 110,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 111,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 112,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 113,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 114,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 115,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 116,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 117,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 118,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 119,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 120,
                'title' => 'expense_create',
            ],
            [
                'id'    => 121,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 122,
                'title' => 'expense_show',
            ],
            [
                'id'    => 123,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 124,
                'title' => 'expense_access',
            ],
            [
                'id'    => 125,
                'title' => 'income_create',
            ],
            [
                'id'    => 126,
                'title' => 'income_edit',
            ],
            [
                'id'    => 127,
                'title' => 'income_show',
            ],
            [
                'id'    => 128,
                'title' => 'income_delete',
            ],
            [
                'id'    => 129,
                'title' => 'income_access',
            ],
            [
                'id'    => 130,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 131,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 132,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 133,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 134,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 135,
                'title' => 'course_create',
            ],
            [
                'id'    => 136,
                'title' => 'course_edit',
            ],
            [
                'id'    => 137,
                'title' => 'course_show',
            ],
            [
                'id'    => 138,
                'title' => 'course_delete',
            ],
            [
                'id'    => 139,
                'title' => 'course_access',
            ],
            [
                'id'    => 140,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 141,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 142,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 143,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 144,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 145,
                'title' => 'test_create',
            ],
            [
                'id'    => 146,
                'title' => 'test_edit',
            ],
            [
                'id'    => 147,
                'title' => 'test_show',
            ],
            [
                'id'    => 148,
                'title' => 'test_delete',
            ],
            [
                'id'    => 149,
                'title' => 'test_access',
            ],
            [
                'id'    => 150,
                'title' => 'question_create',
            ],
            [
                'id'    => 151,
                'title' => 'question_edit',
            ],
            [
                'id'    => 152,
                'title' => 'question_show',
            ],
            [
                'id'    => 153,
                'title' => 'question_delete',
            ],
            [
                'id'    => 154,
                'title' => 'question_access',
            ],
            [
                'id'    => 155,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 156,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 157,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 158,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 159,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 160,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 161,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 162,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 163,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 164,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 165,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 166,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 167,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 168,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 169,
                'title' => 'test_answer_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
