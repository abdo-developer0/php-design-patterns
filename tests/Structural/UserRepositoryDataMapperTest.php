<?php

namespace PhpDesignPatterns\Tests\Structural;

use PhpDesignPatterns\Structural\DataMapper\ArrayDBManager;
use PhpDesignPatterns\Structural\DataMapper\User;
use PhpDesignPatterns\Structural\DataMapper\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryDataMapperTest extends TestCase
{
    /**
     * data mapper.
     */
    private UserRepository  $userRepository;

    /**
     * Set Up for test.
     * 
     * @return void\
     */
    public function setUp(): void
    {
        parent::setUp();

        $data = [
            [
                'email' => 'user1@test.com',
                'name' => 'user1'
            ],
            [
                'email' => 'user2@test.com',
                'name' => 'user2'
            ],
        ];

        $this->userRepository = new UserRepository(
            new ArrayDBManager($data)
        );
    }

    /**
     * @test
     * @return void
     */
    public function it_can_retrieve_all_users(): void
    {
        $users = $this->userRepository->getAll();

        $this->assertIsArray($users);
        $this->assertCount(2, $users);

        // check if array of User objects.
        foreach ($users as $user) {
            $this->assertInstanceOf(User::class, $user);
        }
    }

    /**
     * @test
     * @return void
     */
    public function it_can_insert_user(): void
    {
        $user3 = new User('user3@test.com', 'user3');
        $this->assertInstanceOf(User::class, $this->userRepository->create($user3));
        $users = $this->userRepository->getAll();
        
        $this->assertIsArray($users);
        $this->assertCount(3, $users);
        $this->assertEquals($users[2], $user3);
    }

    /**
     * @test
     * @return void
     */
    public function is_can_find_one_user(): void
    {
        $user = $this->userRepository->findOne('user1@test.com');
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('user1@test.com', $user->getEmail());
        $this->assertEquals('user1', $user->getName());
    }

    /**
     * @test
     * @return void
     */
    public function is_can_update_one_user(): void
    {
        $user = $this->userRepository->findOne('user1@test.com');
        $this->assertInstanceOf(User::class, $user);

        $user->setName('abdo');
        $this->assertTrue($this->userRepository->update($user->getEmail(), $user));

        $user = $this->userRepository->findOne('user1@test.com');
        $this->assertEquals('user1@test.com', $user->getEmail());
        $this->assertEquals('abdo', $user->getName());
    }

    /**
     * @test
     * @return void
     */
    public function it_can_delete_one_user(): void
    {
        $this->assertTrue($this->userRepository->delete('user1@test.com'));
        $this->assertCount(1, $this->userRepository->getAll());
        $this->assertNull($this->userRepository->findOne('user1@test.com'));
    }
}
