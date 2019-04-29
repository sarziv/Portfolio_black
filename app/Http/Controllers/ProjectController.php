<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class ProjectController extends BaseController
{

    protected $projectInfo;
    protected $Info;

    //Project page route and data
    public function projects()
    {
        $projectList = $this->projectArray();
        $info = $this->projectLandInfo();

        return view(('layouts.projects'), compact('info', 'projectList'));

    }

    //Project landing page data
    private function projectLandInfo()
    {
        $this->Info = [
            'title' => 'Projects',
            'quate' => 'Dreams come true.',
            'background' => '../images/jeshoots-com-219386-unsplash.jpg'
        ];
        return $this->Info;

    }

     /*Dynamic project generation*/
     /*  Projects Array
     *  Project ->  id , name , details, tags[array], github, front, album[array]
     * */
    private function projectArray()
    {

        $this->projectInfo = [
            'project' => [
                [
                    'id' => '1',
                    'name' => 'Salary system',
                    'details' => 'System for counting salaries, tracking data',
                    'tags' => ['Laravel', 'php', 'MySQl', 'Bootstrap', 'CSS', 'HTML', 'Responsive'],
                    'github' => 'https://github.com/sarziv/salarysystem',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],

                ],
                [
                    'id' => '2',
                    'name' => 'CoinGate',
                    'details' => 'Crypto currency API, sandbox environment experiment.',
                    'tags' => ['Laravel', 'php', 'API'],
                    'github' => 'https://github.com/sarziv/coingate',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],

                ],
                [
                    'id' => '3',
                    'name' => 'Ordering system',
                    'details' => 'System for managing, creating orders.',
                    'tags' => ['LAMP', 'Responsive', 'CSS', 'HTML'],
                    'github' => 'https://github.com/sarziv/IT_Projektas',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],

                ],
                [
                    'id' => '4',
                    'name' => 'Droperino',
                    'details' => 'File upload and management system',
                    'tags' => ['php', 'HTML', 'CSS', 'JS'],
                    'github' => 'https://github.com/sarziv/salarysystem',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],
                ],
                [
                    'id' => '5',
                    'name' => 'Two side website',
                    'details' => 'Gambling Machine',
                    'tags' => ['HTML', 'CSS', 'JS'],
                    'github' => 'https://github.com/sarziv/2SideWebsite',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],
                ],
                [
                    'id' => '6',
                    'name' => 'PHP mini',
                    'details' => 'PHP Games, Modules',
                    'tags' => ['PHP'],
                    'github' => '',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],
                ],
                [
                    'id' => '7',
                    'name' => 'Two side website',
                    'details' => 'Gambling Machine',
                    'tags' => ['HTML', 'CSS', 'JS'],
                    'github' => 'https://github.com/sarziv/2SideWebsite',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],
                ],
                [
                    'id' => '8',
                    'name' => 'Minimalism',
                    'details' => 'E-commerce shop',
                    'tags' => ['Laravel', 'HTML', 'CSS', 'JS'],
                    'github' => '',
                    'front' => 'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    'album' => [
                        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80',
                        'https://images.unsplash.com/photo-1445295029071-5151176738d0?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=d1b06f7f69fb043b7d35a48180c5668d',
                    ],
                ],

            ]];

        return $this->projectInfo;
    }

}