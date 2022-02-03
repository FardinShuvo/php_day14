<?php


namespace App\classes;


class Student
{
    protected $text;
    protected $students;
    protected $result=[];

    public function __construct($post=null)
    {
        if(isset($post['search'])) {
            $this->text = $post['search'];

        }
    }

    public function getAllStudent()
    {
        return [
            0=>[
                'name'=>'Fardin Shuvo',
                'mobile'=>'12345',
                'email'=>'fardin@gmail.com',
                'address'=>'panthapath'
            ],
            1=>[
                'name'=>'Sreejon',
                'mobile'=>'12345',
                'email'=>'sreejon@gmail.com',
                'address'=>'panthapath'
            ],
            2=>[
                'name'=>'Habu Shehon',
                'mobile'=>'12347',
                'email'=>'habu@gmail.com',
                'address'=>'mirpur'
            ],
            3=>[
                'name'=>'Tarok',
                'mobile'=>'12348',
                'email'=>'tarok@gmail.com',
                'address'=>'Old Dhaka'
            ],
            4=>[
                'name'=>'Shykot',
                'mobile'=>'12349',
                'email'=>'shykot@gmail.com',
                'address'=>'Narayangonj'
            ],
            5=>[
                'name'=>'Fahim',
                'mobile'=>'12310',
                'email'=>'fahim@gmail.com',
                'address'=>'Jurain'
            ]
        ];
    }
    public function getStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if($this->text == $student['name'])
            {
                $this->result=$student;
                break;
            }
        }
        return $this->result;
    }
}