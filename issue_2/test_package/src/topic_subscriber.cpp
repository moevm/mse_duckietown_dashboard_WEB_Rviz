// ROS Default Header File
#include "ros/ros.h"
// Message File Header
#include "std_msgs/String.h"

void msgCallback(const std_msgs::StringConstPtr& msg)
{
  ROS_INFO("recieve msg = %s", msg->data.c_str());
}

int main(int argc, char **argv)
{
  ros::init(argc, argv, "topic_subscriber_node");
  ROS_INFO("Hello from SUB node");
  ros::NodeHandle nh;
  ros::Subscriber ros_tutorial_sub = nh.subscribe("hello", 100, msgCallback);
  ros::spin();
  return 0;
}
