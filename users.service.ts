import { Injectable } from '@nestjs/common';

export type User = {
  id: number;
  name: string;
  username: string;
  password: string;
};

@Injectable()
export class UsersService {
  private readonly users: User[] = [
    {
      id: 1,
      name: 'Shubh',
      username: 'Shubh',
      password: 'password',
    },
    {
      id: 2,
      name: 'Ishika',
      username: 'Ishika',
      password: 'IloveShubh',
    },
  ];

  async findOne(username: string): Promise<User | undefined> {
    return this.users.find((user) => user.username === username);
  }
}
