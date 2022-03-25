#!/usr/bin/env python
# -*- coding: utf-8 -*-

import rospy
from std_msgs.msg import String

pub = rospy.Publisher('hello', String, queue_size=10)
rospy.init_node('hello_topic_publisher')
rospy.loginfo("Hello from PUB node")
r = rospy.Rate(10) # 10hz

while not rospy.is_shutdown():
    pub.publish("Hello World")
    r.sleep()
